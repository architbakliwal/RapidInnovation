<?php

	define('QA_INCLUDE_DIR1', dirname( __FILE__ ).'/../');
	// echo dirname(__FILE__);
	require_once dirname( __FILE__ ).'/../../qa-config.php';
	require_once dirname( __FILE__ ).'/../qa-base.php';
	require_once dirname( __FILE__ ).'/../qa-app-users.php';

	$passwordsent=qa_get('ps');
	$emailexists=qa_get('ee');

	$inemailhandle=qa_post_text('emailhandle');
	$inpassword=qa_post_text('password');
	$inremember=qa_post_text('remember');

	if (qa_clicked('dologin') && (strlen($inemailhandle) || strlen($inpassword)) ) {
		require_once QA_INCLUDE_DIR1.'db/users.php';
		require_once QA_INCLUDE_DIR1.'db/selects.php';
		require_once QA_INCLUDE_DIR1.'app/limits.php';

		if (qa_user_limits_remaining(QA_LIMIT_LOGINS)) {

			if (!qa_check_form_security_code('login', qa_post_text('code')))
				$pageerror=qa_lang_html('misc/form_security_again');

			else {
				qa_limits_increment(null, QA_LIMIT_LOGINS);

				$errors=array();

				if (qa_opt('allow_login_email_only') || (strpos($inemailhandle, '@')!==false)) // handles can't contain @ symbols
					$matchusers=qa_db_user_find_by_email($inemailhandle);
				else
					$matchusers=qa_db_user_find_by_handle($inemailhandle);

				if (count($matchusers)==1) { // if matches more than one (should be impossible), don't log in
					$inuserid=$matchusers[0];
					$userinfo=qa_db_select_with_pending(qa_db_user_account_selectspec($inuserid, true));

					if (strtolower(qa_db_calc_passcheck($inpassword, $userinfo['passsalt'])) == strtolower($userinfo['passcheck'])) { // login and redirect
						require_once QA_INCLUDE_DIR1.'app/users.php';

						qa_set_logged_in_user($inuserid, $userinfo['handle'], !empty($inremember));

						$topath=qa_get('to');

						if (isset($topath)) {
							qa_redirect_raw($root_url.$topath); // path already provided as URL fragment
						}	
						elseif ($passwordsent)
							qa_redirect('account');
						else
							qa_redirect('');

					} else
						$errors['password']=qa_lang('users/password_wrong');

				} else
					$errors['emailhandle']=qa_lang('users/user_not_found');
			}

		} else
			$pageerror=qa_lang('users/login_limit');

	} else
		$inemailhandle=qa_get('e');