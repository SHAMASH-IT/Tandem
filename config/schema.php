<?php
$database_tables = array(
    'users' => '

    CREATE TABLE `users` (
        `id` int(11) NOT NULL,
        `user_id` text NOT NULL,
        `username` text NOT NULL,
        `email` text NOT NULL,
        `password` text NOT NULL,
        `role` text NOT NULL,
        `data` text NOT NULL,
        `date_creation` timestamp NOT NULL DEFAULT current_timestamp(),
        `active` int(11) NOT NULL DEFAULT -1,
        `connected` int(11) NOT NULL DEFAULT 0,
        `last_connexion` timestamp NOT NULL DEFAULT current_timestamp(),
        `session_token` text NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=ascii;

    ALTER TABLE `users`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `username` (`username`) USING HASH,
    ADD UNIQUE KEY `email` (`email`) USING HASH;

    ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
    COMMIT;
    ',
    'options' => '
    CREATE TABLE `options` (
        `id` int(11) NOT NULL,
        `option_key` text NOT NULL,
        `option_value` text NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
      ALTER TABLE `options` ADD PRIMARY KEY (`id`);
      ALTER TABLE `options` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12; COMMIT;      
    '
);