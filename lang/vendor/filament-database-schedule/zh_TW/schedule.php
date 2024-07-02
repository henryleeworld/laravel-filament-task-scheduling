<?php
return [

    'resource'=>[
        'single' => '排程',
        'plural' => '排程',
        'navigation' => '設定',
        'history' => '顯示執行歷史記錄',
    ],
    'fields' => [
        'command' => '指令',
        'arguments' => '參數',
        'options' => '選項',
        'options_with_value' => '帶值的選項',
        'expression' => 'Cron 表達式',
        'log_filename' => '日誌檔案名稱',
        'output' => '輸出',
        'even_in_maintenance_mode' => '即使在維護模式下',
        'without_overlapping' => '無重疊',
        'on_one_server' => '僅在一台伺服器上執行排程',
        'webhook_before' => '之前的網址',
        'webhook_after' => '之後的網址',
        'email_output' => '用於寄送輸出的電子郵件',
        'sendmail_success' => '執行指令成功後寄送電子郵件',
        'sendmail_error' => '執行指令失敗後寄送電子郵件',
        'log_success' => '如果指令執行成功，則將指令輸出寫入歷史記錄資料表',
        'log_error' => '如果指令執行失敗，則將指令輸出寫入歷史記錄資料表',
        'status' => '狀態',
        'actions' => '動作',
        'data-type' => '資料類型',
        'run_in_background' => '在背景執行',
        'created_at' => '建立時間',
        'updated_at' => '更新時間',
        'never' => '永不',
        'environments' => '環境',
        'limit_history_count' => '限制歷史記錄數',
    ],
    'messages' => [
        'no-records-found' => '沒有找到記錄。',
        'save-success' => '資料儲存成功。',
        'save-error' => '儲存資料時錯誤。',
        'timezone' => '全部排程將在時區執行：',
        'select' => '選擇一個指令',
        'custom' => '自訂命令',
        'custom-command-here' => '在這自訂指令（例如 `cat /proc/cpuinfo` 或 `artisan db:migrate`）',
        'help-cron-expression' => '如果需要，請按一下此處並使用工具以便建立 Cron 表達式',
        'help-log-filename' => '如果設定了日誌檔案，源自此 Cron 的日誌訊息將寫入 storage/logs/<log filename>.log',
        'help-type' => '可以以逗號分隔指定多個 :type',
        'attention-type-function' => "注意：「函數」類型的參數在排程執行之前執行，其回傳會作為參數傳遞。小心使用，它可能會破壞你的工作",
        'delete_cronjob' => '刪除排程工作',
        'delete_cronjob_confirm' => '您真的要刪除排程工作「:cronjob」？'
    ],
    'status' => [
        'active' => '啟用',
        'inactive' => '停用',
        'trashed' => '軟刪除',
    ],
    'buttons' => [
        'inactivate' => '停用',
        'activate' => '啟用',
        'history' => '歷史記錄',
        'clear_history' => '刪除歷史記錄'

    ],
    'validation' => [
        'cron' => '該欄位必須以 Cron 表達式格式填寫。',
        'regex' => __('validation.alpha_dash') . ' ' . '逗號也是允許的。'
    ]
];
