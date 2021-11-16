CREATE TABLE if not exists guestbook(
    `id` INT(11) UNSIGNED AUTO_INCREMENT NOT NULL,
    `posted_at` DATETIME,
    `name` VARCHAR(255),
    `email` VARCHAR(255) NULL,
    `message` VARCHAR(8000),
    `ip_address` INT(4) UNSIGNED,
    PRIMARY KEY (id)
);

INSERT INTO guestbook (posted_at, name, email, message, ip_address) VALUES
(now(), 'Wim Wiltenburg', 'info@wiltenburg.io', 'This is a test message', INET_ATON('127.0.0.1'));
INSERT INTO guestbook (posted_at, name, email, message, ip_address) VALUES
(now(), 'Jack Monterey', 'jack.monterrey@gmail.com', 'Another test message', INET_ATON('127.0.0.1'));
