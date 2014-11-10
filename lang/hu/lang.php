<?php

return [
    'location' => [
        'new' => 'Új tartózkodási hely',
        'create_title' => 'Tartózkodási hely létrehozása',
        'update_title' => 'Tartózkodási hely szerkesztése',
        'preview_title' => 'Tartózkodási hely villámnézete',
    ],
    'locations' => [
        'menu_label' => 'Tartózkodási helyek',
        'menu_description' => 'Elérhető felhasználói országok és államok/megyék kezelése.',
        'enabled_label' => "Engedélyezve",
        'enabled_help' => "A letiltott tartózkodási helyek nem láthatók a felhasználói oldalon.",
        'enable_or_disable_title' => "Tartózkodási helyek engedélyezése vagy letiltása",
        'enable_or_disable' => 'Engedélyezés vagy letiltás',
        'selected_amount' => 'Kiválasztott tartózkodási helyek: :amount',
        'enable_success' => "A tartózkodási helyek engedélyezése sikerült.",
        'disable_success' => "A tartózkodási helyek letiltása sikerült.",
        'disable_confirm' => 'Biztos benne?',
        'list_title' => 'Tartózkodási helyek kezelése',
        'state' => 'Állam/megye',
        'delete_confirm' => 'Valóban törölni akarja ezt a tartózkodási helyet?',
        'return_to_list' => 'Vissza a tartózkodási helyek listájához',
    ],
    'users' => [
        'menu_label' => 'Felhasználók',
        'all_users' => 'Minden felhasználó',
        'new_user' => 'Új felhasználó',
        'list_title' => 'Felhasználók kezelése',
        'activating' => 'Aktiválás...',
        'activate_warning_title' => 'Nincs aktiválva a felhasználó!',
        'activate_warning_desc' => 'Ennek a felhasználónak nem történt meg az aktiválása, és nem tud bejelentkezni.',
        'activate_confirm' => 'Valóban aktiválni akarja ezt a felhasználót?',
        'active_manually' => 'A felhasználó kézi aktiválása',
        'delete_confirm' => 'Valóban törölni akarja ezt a felhasználót?',
        'activated_success' => 'A felhasználó aktiválása sikerült!',
        'return_to_list' => 'Vissza a felhasználólistához',
    ],
    'settings' => [
        'menu_label' => 'Felhasználói beállítások',
        'menu_description' => 'A felhasználó alapú beállítások kezelése.',
        'activation_tab' => 'Aktiválás',
        'location_tab' => 'Tartózkodási hely',
        'signin_tab' => 'Bejelentkezés',
        'activate_mode' => 'Aktiválási mód',
        'activate_mode_comment' => 'Válassza ki, hogyan kell aktiválni egy felhasználói fiókot.',
        'activate_mode_auto' => 'Automatikus',
        'activate_mode_auto_comment' => 'Regisztráláskor automatikusan aktiválva.',
        'activate_mode_user' => 'Felhasználó',
        'activate_mode_user_comment' => 'A felhasználó levéllel aktiválja a saját fiókját.',
        'activate_mode_admin' => 'Webhelygazda',
        'activate_mode_admin_comment' => 'Csak webhelygazda aktiválhat felhasználót.',
        'welcome_template' => 'Üdvözlés sablon',
        'welcome_template_comment' => 'A felhasználónak első aktiváláskor küldendő levélsablon.',
        'require_activation' => 'A bejelentkezéshez aktiválás szükséges',
        'require_activation_comment' => 'A felhasználóknak aktivált fiókkal kell rendelkezniük a bejelentkezéshez.',
        'default_country' => 'Alapértelmezett ország',
        'default_country_comment' => 'Ha egy felhasználó nem adja meg a tartózkodási helyét, akkor válasszon egy országot.',
        'default_country_comment' => 'Ha egy felhasználó nem adja meg a tartózkodási helyét, akkor válasszon egy országot.',
        'default_state' => 'Alapértelmezett állam/megye',
        'default_state_comment' => 'Ha egy felhasználó nem adja meg a tartózkodási helyét, akkor válasszon egy államot/megyét.',
        'use_throttle' => 'Kísérletek késleltetése',
        'use_throttle_comment' => 'Az ismétlődő sikertelen bejelentkezések ideiglenesen felfüggesztik a felhasználót.',
        'login_attribute' => 'Bejelentkezési attribútum',
        'login_attribute_comment' => 'Válassza ki, hogy milyen felhasználói adatot kell használni a bejelentkezéshez.',
        'no_mail_template' => 'Nincs értesítés küldése',
        'hint_templates' => 'A levélsablonokat a Beállítások menüben a Levelezés > Levélsablonok választásával szabhatja személyre.',
    ],
    'state' => [
        'name' => 'Név',
        'name_comment' => 'Írja be ennek az államnak/megyének a megjelenítendő nevét.',
        'code' => 'Kód',
        'code_comment' => 'Írja be az ezt az államot/megyét azonosító egyedi kódot.',
    ],
    'country' => [
        'name' => 'Név',
        'code' => 'Kód',
        'code_comment' => 'Írja be az ezt az országot azonosító egyedi kódot.',
        'enabled' => 'Engedélyezve',
    ],
    'user' => [
        'id' => 'Azonosító',
        'username' => 'Felhasználónév',
        'name' => 'Név',
        'email' => 'E-mail cím',
        'created_at' => 'Regisztrált',
        'phone' => 'Telefon',
        'company' => 'Cég',
        'city' => 'Város',
        'zip' => 'Irányítószám',
        'street_addr' => 'Utca, házszám',
        'country' => 'Ország',
        'state' => 'Állam/megye',
        'reset_password' => 'Új jelszó megadása',
        'reset_password_comment' => 'Új jelszó ezen felhasználó részére való megadásához adjon meg itt egy új jelszót.',
        'confirm_password' => 'Jelszó megerősítése',
        'confirm_password_comment' => 'Adja meg újra a jelszót a megerősítéséhez.',
        'avatar' => 'Avatar',
        'details' => 'Adatok',
        'account' => 'Fiók',
    ],
    'login' => [
        'attribute_email' => 'E-mail cím',
        'attribute_username' => 'Felhasználónév',
    ],
    'account' => [
        'account' => 'Fiók',
        'account_desc' => 'Felhasználókezelési űrlap.',
        'redirect_to' => 'Átirányítás',
        'redirect_to_desc' => 'A lapnév az átirányításhoz frissítés, bejelentkezés vagy regisztrálás után.',
        'code_param' => 'Aktiválási kód paraméter',
        'code_param_desc' => 'A regisztrálás aktiválási kódjához használt lap URL-cím paramétere',
        'invalid_activation_code' => 'A megadott aktiválási kód érvénytelen',
        'invalid_user' => 'Nem található a megadott hitelesítési adatokkal rendelkező felhasználó.',
        'success_activation' => 'A fiók aktiválása sikerült.',
        'success_saved' => 'Sikerült menteni a beállításokat!',
        'login_first' => 'Előbb be kell jelentkeznie!',
        'alredy_active' => 'Már aktiválta a fiókját!',
        'activation_email_sent' => 'Az aktiválási e-mail elküldése a megadott e-mail címre megtörtént.',
        'country' => 'Ország',
        'state' => 'Állam/megye',
        'sign_in' => 'Bejelentkezés',
        'register' => 'Regisztráció',
        'full_name' => 'Teljes név',
        'email' => 'E-mail cím',
        'password' => 'Jelszó',
        'register' => 'Regisztráció',
        'login' => 'Bejelentkezés',
        'address' => 'Cím',
        'city_suburb' => 'Város',
        'postal_code' => 'Irányítószám',
        'new_password' => 'Új jelszó',
        'new_password_confirm' => 'Új jelszó megerősítése',
    ],
    'reset_password' => [
        'reset_password' => 'Új jelszó megadása',
        'reset_password_desc' => 'Elfelejtett jelszó űrlap.',
        'code_param' => 'Visszaállító kód paraméter',
        'code_param_desc' => 'A visszaállító kódhoz használt lap URL-cím paraméter',
    ],
    'session' => [
        'session' => 'Munkamenet',
        'session_desc' => 'Hozzáadja egy laphoz a felhasználói munkamenetet, és korlátozhatja a laphoz való hozzáférést.',
        'security_title' => 'Csak engedélyezés',
        'security_desc' => 'Ki számára engedélyezett a hozzáférés ehhez laphoz.',
        'all' => 'Mindenki',
        'users' => 'Felhasználók',
        'guests' => 'Vendégek',
        'redirect_title' => 'Átirányítás',
        'redirect_desc' => 'Az átirányítandó lapnév, ha a hozzáférés megtagadva.',
    ],
];