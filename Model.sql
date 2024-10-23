CREATE TABLE truck (
    id INT PRIMARY KEY,
    license_number VARCHAR(255),
    model VARCHAR(255),
    capacity INT,
    exp_kir DATE,
    status VARCHAR(255)
);
CREATE TABLE driver (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    license_number VARCHAR(255),
    exp_sim DATE,
    experience_years INT
);

CREATE TABLE trip (
    id INT PRIMARY KEY,
    truck_id INT NOT NULL,
    driver_id INT NOT NULL,
    start_location VARCHAR(255),
    end_location VARCHAR(255),
    distance INT,
    trip_date DATE,
    FOREIGN KEY (truck_id) REFERENCES truck(id) ON DELETE CASCADE,
    FOREIGN KEY (driver_id) REFERENCES driver(id) ON DELETE CASCADE
);

