



CREATE TABLE IF NOT EXISTS category (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  `prioty` tinyint(4) DEFAULT 0,
  `parent_id` int(11) DEFAULT 0,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS brand (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  `prioty` tinyint(4) DEFAULT 0,
  `parent_id` int(11) DEFAULT 0,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS product (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(200) NOT NULL,
  image VARCHAR(200) NOT NULL,
  price float(9,3) NOT NULL,
  sale_price float(9,3) DEFAULT '0',
  description text,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  category_id int NOT NULL,
  brand_id int NOT NULL,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL,
  FOREIGN KEY (category_id) REFERENCES category(id),
  FOREIGN KEY (brand_id) REFERENCES brand(id)
) ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS `color` (
  `id` INT  AUTO_INCREMENT primary key,
    `name` VARCHAR(255) UNIQUE,
  `prioty` tinyint(4) DEFAULT 0,
  `parent_id` int(11) DEFAULT 0,
    created_at date DEFAULT current_timestamp(),

  `updated_at` date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS product_color (
    product_id int NOT NULL,
    color_id int NOT NULL,
    created_at date DEFAULT current_timestamp(),
    updated_at date DEFAULT NULL,
    PRIMARY KEY (product_id,color_id),
    FOREIGN KEY (color_id) REFERENCES color(id),
    FOREIGN KEY (product_id) REFERENCES product(id)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `image` (
  `id` INT  AUTO_INCREMENT primary key,
  `name` VARCHAR(255) UNIQUE,
    product_id int NOT NULL,
    FOREIGN KEY (product_id) REFERENCES product(id),
    created_at date DEFAULT current_timestamp(),

  `updated_at` date DEFAULT NULL
) ENGINE = InnoDB;


CREATE TABLE IF NOT EXISTS comment (
    product_id int NOT NULL,
    customer_id int NOT NULL,
    status tinyint(1) DEFAULT '1' COMMENT '1 là ok, 0 bị khóa',
    content text NOT NULL,
    created_at date DEFAULT current_timestamp(),
    updated_at date DEFAULT NULL,
    PRIMARY KEY (product_id,customer_id),
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (product_id) REFERENCES product(id)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `order` (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  phone VARCHAR(100) NULL,
  address VARCHAR(255) NULL,
  note text,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  customer_id int NOT NULL,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL,
  FOREIGN KEY (customer_id) REFERENCES customer(id)
) ENGINE = InnoDB;

CREATE TABLE `banner` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(255) DEFAULT '#',
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
  `prioty` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS account (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  phone VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  address VARCHAR(255) NULL,
  role VARCHAR(50) ,
  status tinyint(1) DEFAULT '1' COMMENT '1 là ok, 0 bị khóa',
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS customer (
  id int PRIMARY KEY AUTO_INCREMENT,
  firstName VARCHAR(100) NOT NULL,
  lastName VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  phone VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  address VARCHAR(255) NULL,
  role VARCHAR(50) DEFAULT 'customer',
  status tinyint(1) DEFAULT '1' COMMENT '1 là ok, 0 bị khóa',
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE `services` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
   `summary` text DEFAULT NOT NULL,
   `content` text DEFAULT NOT NULL,
  `image` varchar(200) NOT NULL,
  `prioty` tinyint(4) DEFAULT 0,
  `status` tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
   `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)ENGINE=InnoDB;

CREATE TABLE `books` (
  customer_id int NOT NULL,
  service_id int NOT NULL,
  cus_date date not null,
  primary key(customer_id, service_id),
  FOREIGN KEY (customer_id) REFERENCES customer(id),
  FOREIGN KEY (service_id) REFERENCES service(id),
   `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()

)ENGINE=InnoDB;


-- ======================================================================================================

CREATE TABLE IF NOT EXISTS category (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  prioty tinyint(4) DEFAULT 0,
  parent_id int(11) DEFAULT 0,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS brand (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  prioty tinyint(4) DEFAULT 0,
  parent_id int(11) DEFAULT 0,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS product (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(200) NOT NULL,
  image VARCHAR(200) NOT NULL,
  price float(9,3) NOT NULL,
  sale_price float(9,3) DEFAULT '0',
  description text,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  category_id int NOT NULL,
  brand_id int NOT NULL,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL,
  FOREIGN KEY (category_id) REFERENCES category(id),
  FOREIGN KEY (brand_id) REFERENCES brand(id)
) ENGINE = InnoDB;



CREATE TABLE IF NOT EXISTS color (
  id INT  AUTO_INCREMENT primary key,
  name VARCHAR(255) UNIQUE,
  prioty tinyint(4) DEFAULT 0,
  parent_id int(11) DEFAULT 0,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS product_color (
    product_id int NOT NULL,
    color_id int NOT NULL,
    created_at date DEFAULT current_timestamp(),
    updated_at date DEFAULT NULL,
    PRIMARY KEY (product_id,color_id),
    FOREIGN KEY (color_id) REFERENCES color(id),
    FOREIGN KEY (product_id) REFERENCES product(id)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS image (
  id INT  AUTO_INCREMENT primary key,
  name VARCHAR(255) UNIQUE,
  product_id int NOT NULL,
  FOREIGN KEY (product_id) REFERENCES product(id),
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;


CREATE TABLE banner (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  name varchar(200) NOT NULL,
  image varchar(200) NOT NULL,
  link varchar(255) DEFAULT '#',
  description varchar(255) DEFAULT NULL,
  status tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
  prioty tinyint(4) DEFAULT 0,
  created_at timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS users (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  status tinyint(1) DEFAULT '1' COMMENT '1 là ok, 0 bị khóa',
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS customer(
    id int PRIMARY KEY AUTO_INCREMENT,
    firtsName varchar(250) NOT NULL,
    lastName varchar(250) NOT NULL,
    email varchar(100) NOT NULL UNIQUE,
    phone varchar(100) NOT NULL UNIQUE,
    password varchar(100) NOT NULL,
    address varchar(250) NULL,
    status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
    created_at date DEFAULT current_timestamp(),
    updated_at date DEFAULT NULL

) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS feedback (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  status tinyint(1) DEFAULT '1' COMMENT '1 là ok, 0 bị khóa',
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;




CREATE TABLE IF NOT EXISTS blog (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  prioty tinyint(4) DEFAULT 0,
  parent_id int(11) DEFAULT 0,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS blogdetail (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(200) NOT NULL,
  image VARCHAR(200) NOT NULL,
  description text,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  cate_blog_id  int NOT NULL,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL,
  FOREIGN KEY (cate_blog_id ) REFERENCES blog(id)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS about (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(200) NOT NULL,
  image VARCHAR(200) NOT NULL,
  description text,
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL,
  
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS orders (
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NULL,
  email VARCHAR(100) NULL,
  phone VARCHAR(100) NULL,
  address VARCHAR(255) NULL,
  note text,
  token varchar(200),
  status tinyint(1) DEFAULT '1' COMMENT '1 là hiển thị, 0 ẩn',
  customer_id int NOT NULL,
  created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL,
  FOREIGN KEY (customer_id) REFERENCES customer(id)
) ENGINE = InnoDB;

CREATE TABLE order_detail (
  order_id int(11) NOT NULL,
  product_id int(11) NOT NULL,
  quantity int(11) NOT NULL,
  price float NOT NULL,
  FOREIGN KEY (order_id) REFERENCES orders(id),
  FOREIGN KEY (product_id) REFERENCES product(id),
   created_at date DEFAULT current_timestamp(),
  updated_at date DEFAULT NULL,
) ENGINE=InnoDB ;

CREATE TABLE services (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
   summary text  NOT NULL,
   content text  NOT NULL,
  image varchar(200) NOT NULL,
  prioty tinyint(4) DEFAULT 0,
  status tinyint(1) DEFAULT 1 COMMENT '1 là hiển thị, 0 ẩn',
   created_at timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
)ENGINE=InnoDB;

CREATE TABLE books (
  customer_id int NOT NULL,
  services_id int NOT NULL,
  cus_date date not null,
  primary key(customer_id, services_id),
  FOREIGN KEY (customer_id) REFERENCES customer(id),
  FOREIGN KEY (services_id) REFERENCES services(id),
   created_at timestamp NOT NULL DEFAULT current_timestamp(),
  updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()

)ENGINE=InnoDB
