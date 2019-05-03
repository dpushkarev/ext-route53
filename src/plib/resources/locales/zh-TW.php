<?php
// Copyright 1999-2018. Plesk International GmbH.
$messages = [
  'actionsColumn' => '操作',
  'authDataSaved' => '已保存授權資料。',
  'awsApiAuthorization' => 'AWS API 授權',
  'awsDescriptionWindow' => '為了管理Route53，你需要一個受限制的IAM用戶帳戶來用於Amazon中的身份認證。如果您提供根帳戶憑證，Plesk就將為您創建一個受限制的IAM用戶帳戶。',
  'awsKeyType' => '金鑰類型',
  'awsSecurityTokenInvalid' => '請求中包括的安全權杖是無效的。',
  'buttonNo' => '否',
  'buttonYes' => '是',
  'cli.commands.init' => '利用憑證對擴展進行初始化。建議將ACCESS_KEY 和 SECRET_KEY 作為環境變數傳遞。',
  'cli.commands.init.wrongSyntax' => '錯誤的命令語法',
  'cli.options.access-key' => '連接金鑰',
  'cli.options.clear' => '清除初始化參數',
  'cli.options.root' => '使用根IAM帳戶',
  'cli.options.secret-key' => '金鑰',
  'cli.options.user' => '使用受限制的IAM帳戶',
  'cliClearSuccess' => '身份驗證權杖已清除。',
  'cliValidationFailed' => '驗證失敗。',
  'createDelegationSetButton' => '創建一個代表組',
  'createDelegationSetHint' => '創建一個能夠被多個託管區重複使用的代表組（包含四個名稱伺服器的組）。',
  'defaultDelegationSet' => '默認代表組',
  'defaultDelegationSetButton' => '存為默認',
  'defaultDelegationSetChanged' => '已更改默認可重複使用的代表組。',
  'delegationSetCreated' => '已創建可重複使用的代表組。',
  'delegationSetDeleted' => '已刪除可重複使用的代表組。',
  'delegationSetTitle' => '可重複使用的代表組',
  'deleteDelegationSetButton' => '刪除代表組',
  'enabledLabel' => '打開Amazon Web Service Route 53',
  'manageNsRecordsLabel' => 'Manage NS and SOA records',
  'formPreCreatedLimitedUserCredential' => '我已經創建了一個受限制的IAM用戶帳戶',
  'formRootCredential' => '我將使用這個根帳戶憑證（不會被存儲）',
  'getAuth' => '您可以在這裡找到您的根帳戶憑證',
  'getAuthStepTwo' => '您也可以自己創建一個。如果您要這麼做，請確保允許帳戶連接 "route53:*" 和 "route53domains:*" (<a href="%%learnMoreUrl%%">learn more</a>)。',
  'hostedZoneNone' => '無',
  'hostedZoneSelect' => '重複使用現有託管區域的代表組',
  'iamUserCreated' => '已經創建了一個名稱為"%%userName%%"的受限IAM用戶。',
  'indexPageTitle' => 'AWS API 授權',
  'ipAddressesColumn' => 'IP 地址',
  'keyLabel' => '金鑰',
  'login' => '登入',
  'nameServersColumn' => '名稱伺服器',
  'notAdministratorAccess' => '無法創建用戶。',
  'pageTitle' => 'Amazon Route 53',
  'removeAllButton' => '刪除所有區域',
  'removeAllConfirm' => '您確定要完全刪除所有託管在Amazon上的區域嗎？',
  'removeAllDone' => '已刪除所有託管在Amazon上的區域。',
  'removeAllHint' => '完全刪除所有託管在Amazon上的區域。',
  'resetDefaultDelegationSetButton' => '恢復默認設定',
  'resetDefaultDelegationSetHint' => '新託管區域將不會重複使用任何現有的代表組。',
  'secretLabel' => '秘密',
  'statusRootAccountCredentials' => '系統將不會存儲您的根帳戶憑證。它們僅用於創建受限的IAM使用者帳戶。',
  'syncAllButton' => '同步所有區域',
  'syncAllConfirm' => '您確定要把所有在Plesk中註冊的區域都同步到Amazon嗎？',
  'syncAllDone' => '所有在Plesk中註冊的區域都同步到了Amazon。',
  'syncAllHint' => '將所有關於DNS區域的資訊從Plesk資料庫推送到Amazon。',
  'toolsTitle' => '中管理',
  'userLoggedIn' => '用戶已登入。',
  'userLoggedInError' => '用戶無法登入。',
  'whiteLabel' => '瞭解更多關於白標籤名稱伺服器的資訊。',
];