CREATE TABLE `articles` (
                            `id` int NOT NULL,
                            `section_id` int NOT NULL,
                            `section_name` text NOT NULL,
                            `title` text NOT NULL,
                            `created` datetime NOT NULL
);


ALTER TABLE `articles`
    ADD PRIMARY KEY `id` (`id`);


