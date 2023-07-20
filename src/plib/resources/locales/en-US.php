<?php
// Copyright 1999-2018. Plesk International GmbH.
$messages = array(
    'pageTitle' => 'Amazon Route 53',
    'indexPageTitle' => 'AWS API Authorization',
    'delegationSetTitle' => 'Reusable Delegation Sets',
    'toolsTitle' => 'Mass Management',
    'keyLabel' => 'Key',
    'secretLabel' => 'Secret',
    'enabledLabel' => 'Turn on Amazon Web Service Route 53',
    'infoColumn' => 'Info',
    'delegationSetLimit' => 'Limit',
    'manageNsRecordsLabel' => 'Manage NS and SOA records',
    'manageNsRecordsDescription' => '<b>Note:</b> Enabling this option without completing the necessary preliminary steps may make your websites unavailable. Applying the changes may take up to 72 hours.<br>This option allows for transferring of NS records from Plesk to the Route 53 name servers. It is a necessary preliminary step for setting up white-label name servers using Route 53 name servers. <a href="https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/white-label-name-servers.html" target="_blank">Read the Route 53 guide to learn more</a>.',
    'authDataSaved' => 'The authorization data was saved.',
    'getAuth' => 'Find your root account credentials here',
    'getAuthStepTwo' => 'You can also create one yourself. If you do, make sure to grant the "route53:*" and "route53domains:*" permissions to the account (<a href="%%learnMoreUrl%%">learn more</a>).',
    'getAuthNoRoot' => 'Make sure that <a href="%%learnMoreUrl%%">you have granted the "route53:*" and "route53domains:*" permissions</a>  to your IAM user.',
    'createDelegationSetButton' => 'Create a Delegation Set',
    'createDelegationSetHint' => 'Creates a delegation set (a group of four name servers) that can be reused by multiple hosted zones.',
    'resetDefaultDelegationSetButton' => 'Reset to Default',
    'resetDefaultDelegationSetHint' => 'New hosted zones will not reuse any existing delegation sets.',
    'delegationSetCreated' => 'A reusable delegation set was created.',
    'nameServersColumn' => 'Name Servers',
    'ipAddressesColumn' => 'IP Addresses',
    'actionsColumn' => 'Actions',
    'deleteDelegationSetButton' => 'Remove the Delegation Set',
    'whiteLabel' => 'Learn more about white label name servers.',
    'hostedZoneSelect' => 'Reuse the delegation set of an existing hosted zone',
    'hostedZoneNone' => 'None',
    'delegationSetDeleted' => 'A reusable delegation set was deleted.',
    'defaultDelegationSet' => 'Default Delegation Set',
    'defaultDelegationSetButton' => 'Make Default',
    'defaultDelegationSetChanged' => 'The default reusable delegation set was changed.',
    'syncAllButton' => 'Sync All Zones',
    'syncAllHint' => 'Pushes the information about all DNS zones from the Plesk database to Amazon.',
    'syncAllConfirm' => 'Push all zones registered in Plesk to Amazon? Before syncing this will delete all records for Plesk zones already in Amazon.',
    'removeAllButton' => 'Remove All Zones',
    'removeAllHint' => 'Completely removes all zones hosted on Amazon.',
    'removeAllConfirm' => 'Are you sure you want to completely remove all zones hosted on Amazon?',
    'buttonYes' => 'Yes',
    'buttonNo' => 'No',
    'syncAllDone' => 'All zones registered in Plesk were synchronized with Amazon.',
    'removeAllDone' => 'All zones hosted on Amazon were removed.',
    'awsApiAuthorization' => 'AWS API Authorization',
    'awsDescriptionWindow' => 'You need an IAM user to manage Amazon Route 53.',
    'awsDescriptionWindowRoot' =>' If you provide credentials to your account root user, Plesk will create an IAM user in AWS for you.',
    'awsKeyType' => 'Key type',
    'formRootCredential' => 'I will use the root account credentials (will not be stored)',
    'formPreCreatedLimitedUserCredential' => 'I have created a restricted IAM user account',
    'awsSecurityTokenInvalid' => 'The security token included in the request is invalid.',
    'statusRootAccountCredentials' => 'Your root account credentials will not be stored. They are used only for creating a restricted IAM user account.',
    'userLoggedInError' => 'Could not log the user in.',
    'userLoggedIn' => 'User was logged in.',
    'iamUserCreated' => 'A restricted IAM user was created with the name "%%userName%%".',
    'notAdministratorAccess' => 'Could not create user.',
    'cli.commands.init' => 'Initialize extension with credentials. ACCESS_KEY and SECRET_KEY is recommended to pass as environment variables.',
    'cli.commands.init.wrongSyntax' => 'Wrong command syntax',
    'cli.options.root' => 'Use root IAM account',
    'cli.options.user' => 'Use restricted IAM account',
    'cli.options.access-key' => 'Access key',
    'cli.options.secret-key' => 'Secret key',
    'cli.options.clear' => 'Clear initialized parameters',
    'cliClearSuccess' => 'Authentication token was cleared.',
    'cliValidationFailed' => 'Validation failed.',
    'login' => 'Log in',
);
