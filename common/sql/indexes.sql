ALTER TABLE `articles`
    ADD FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`)