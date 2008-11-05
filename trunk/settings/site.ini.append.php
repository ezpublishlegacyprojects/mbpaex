<?php /*

[UserSettings]
ExtensionDirectory[]=mbpaex

# Reset array to disable standard login handler that bypass the 
# paex validation
LoginHandler[]
LoginHandler[]=paex

[RegionalSettings]
TranslationExtensions[]=mbpaex

[SiteAccessRules]
Rules[]=access;disable
Rules[]=module;user
Rules[]=access;enable
Rules[]=module;user/login
Rules[]=module;user/logout
Rules[]=module;user/preferences

# Allow anonymous access to change password form for users with 
# expired password to change it without log into the system and
# to forgotpassword process for users get a new forgot password.
[RoleSettings]
PolicyOmitList[]=userpaex/password
PolicyOmitList[]=userpaex/forgotpassword

*/ ?>
