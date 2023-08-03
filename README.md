# openlab-oneonta
Child theme for SUNY Oneonta's OpenLab

This is a light childtheme written to extend the OpenLab Theme for Commons in a Box OpenLab.

The main purpose of this theme is use with a site that is connected to an institutional Single Sign On.

## Differences from OpenLab Theme:
* Disable front page login form in favor of sign up and sign in buttons
* Replace CBOX OpenLab's default registration page with a slightly modified register page. Important: The custom register page hides the password fields from the user, and generates a random 12 character password that the user will not see. The assumption is that the user will log in via SSO, and that you will configure the SSO configuration to match accounts based on email.
  * This allows users to select their own usernames (which are public) and not be forced into using the institutional usernames.
  * Sites should be protected by requiring email addresses only from your institution.
* Disables fields on the OpenLab Edit Settings page to remove the ability to change passwords or email

 The expanding login form in the OpenLab Universal Header needs to be disabled using a mu-plugin. Recommend that you install https://github.com/beckej13820/disable-openlab-loginform into the mu-plugin folder.
