CREATE TABLE users (
    id          SERIAL PRIMARY KEY,
    firstname   VARCHAR(100) NOT NULL,
    lastname    VARCHAR(100) NOT NULL,
    email       VARCHAR(150) UNIQUE NOT NULL,
    mobilephone VARCHAR(20),
    password    VARCHAR(255) NOT NULL,
    status      VARCHAR(20)  DEFAULT 'active',
    url_photo   VARCHAR(255) DEFAULT 'default.png',
    created_at  TIMESTAMP    DEFAULT CURRENT_TIMESTAMP
);