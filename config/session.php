<?php
return ['driver' => env('SESSION_DRIVER', 'file'), 'lifetime' => 120, 'files' => storage_path('framework/sessions'), 'cookie' => 'chateau_session', 'path' => '/', 'secure' => false, 'http_only' => true, 'same_site' => 'lax'];
