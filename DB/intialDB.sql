
CREATE TABLE
    `y13_assessment`.`login` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(50) NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;

INSERT INTO
    `login` (`id`, `username`, `password`)
VALUES
    (NULL, 'johnny', 'happybirthday');

CREATE TABLE
    `y13_assessment`.`products` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(200) NOT NULL,
        `description` VARCHAR(1000) NOT NULL,
        `image` VARCHAR(255) NOT NULL,
        `price` VARCHAR(20) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;


INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) 
    VALUES (NULL, 'Pitcher Filter', 'Sleek, BPA-free pitcher with 7-stage filtration for crystal-clear, fresh water. Holds 10 cups with a filter-life indicator.', 'images/waterfilter1.jpg', '34.99');

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES (NULL, 'Faucet Mount Filter', 'Compact faucet mount reduces 70+ contaminants for pure, radiant water. Easy to install with filtered/unfiltered toggle.', 'images/waterfilter2.jpg', '44.99');

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES (NULL, 'Under-Sink System', '3-stage under-sink filter removes 99% of contaminants, delivering limpid, safe water while preserving minerals.', 'images/waterfilter3.jpg', '179.99');

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES (NULL, 'Countertop Purifier', 'Portable RO purifier with UV sterilization removes 99.99% of impurities for pristine water, no installation needed.', 'images/waterfilter4.jpg', '349.99');

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES (NULL, 'Whole-House Filter', 'Multi-stage whole-house system removes chlorine and metals, ensuring vital, clean water for every tap.', 'images/waterfilter5.jpg', '999.99');

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES (NULL, 'Portable Filter', 'A super-lightweight straw filter removes 99.9999% of bacteria for radiant, safe water on the go.', 'images/waterfilter6.jpg', '19.99');