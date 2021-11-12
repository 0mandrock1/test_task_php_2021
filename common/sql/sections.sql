CREATE TABLE `sections` (
                            `section_id` int NOT NULL,
                            `section_name` text NOT NULL
);


ALTER TABLE `sections`
    CHANGE `section_id` `id` int NOT NULL FIRST,
    CHANGE `section_name` `name` text COLLATE 'utf8mb4_0900_ai_ci' NOT NULL AFTER `id`;


ALTER TABLE `sections`
    ADD PRIMARY KEY `id` (`id`);


