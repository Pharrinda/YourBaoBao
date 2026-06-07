# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

YourBaoBao is a Thai-language e-commerce intermediary service that allows Thai customers to order goods from Chinese websites (Taobao, 1688.com, Alibaba) and have them shipped to Thailand. It handles order processing, payment topup, withdrawals, and address management.

## Tech Stack

- **Backend**: PHP (legacy, no framework) served via Apache with `mod_rewrite`
- **Database**: MySQL accessed via `mysqli_*` functions (no ORM)
- **Frontend**: Server-side rendered HTML/PHP templates with Bootstrap
- **Email**: PHPMailer (expected at `../PHPMailer-master/PHPMailerAutoload.php` relative to form handlers)
- **Language**: Thai throughout UI and validation messages

## Repository State

All PHP source files were removed from this repository in October 2021. The original codebase is preserved in git history (commit `b471c07`). To restore files for reference:

```bash
git show b471c07:<filename>   # view a specific file
git checkout b471c07 -- .     # restore all original files
```

## Architecture

The application has no routing framework — `index.php` handles all page rendering by parsing `$_SERVER['REQUEST_URI']` with `explode("/", ...)` and using `switch` on URL segments to set page titles and load content.

### Configuration

All files `include("config/config.php")` (or `"../config/config.php"` from subdirectories). This file provides:
- `$conn` — the active `mysqli` database connection
- `$pathweb` — base URL for asset and link generation
- `$prefix` — table name prefix for all DB queries (e.g., `$prefix."_member_searchtaobao"`)

### Authentication

User identity is stored in a cookie `_htime` encrypted via a custom `encrypt_decrypt()` function. Auth check pattern used in every form handler:

```php
$uid = encrypt_decrypt('decrypt', $_COOKIE['_htime']);
if ($uid == "" || $uid == 0) {
    // redirect to login
}
```

### Form Handlers

Form submissions POST to dedicated PHP files (`SaveFormTopup.php`, `SaveFormAddress.php`). They:
1. Decrypt the user cookie to get `$uid`
2. Validate all fields, echoing inline `<script>` tags calling `top.alert_error()` on failure then `exit()`
3. Sanitize inputs with `mysqli_real_escape_string($conn, ...)` before inserting
4. Send confirmation emails via PHPMailer on success

### AJAX

`ajax_home.php` handles AJAX requests dispatched by `$_REQUEST['method']`. Each `method` value maps to a block that queries the DB and returns HTML fragments rendered directly into the page.

### Thai Address Fields

Address forms use a four-level Thai geographic hierarchy: Province (จังหวัด) → Amphur (อำเภอ) → Tambun (ตำบล) → Postcode (รหัสไปรษณีย์).

## Key Helper Functions

Defined in `config/config.php` or included utilities:

| Function | Purpose |
|---|---|
| `encrypt_decrypt($action, $string)` | Encrypt/decrypt cookie values for session auth |
| `lastdot($filename)` | Extract file extension from uploaded filename |
| `mbStringwithDot($str, $len)` | Truncate multibyte (Thai) strings with ellipsis |

## Development Setup

- Apache with `mod_rewrite` enabled
- PHP with `mysqli` extension
- MySQL database; table names follow `{$prefix}_*` convention
- `config/config.php` must exist with `$conn`, `$pathweb`, and `$prefix` defined
- PHPMailer placed at `../PHPMailer-master/` relative to the web root

There is no build step, package manager, test suite, or linting configuration.
