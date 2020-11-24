CREATE TABLE user(
  id int(11) NOT NULL PRIMARY KEY AUTO,
  username varchar(80) NOT NULL,
  fname varchar(80) NOT NULL,
  lname varchar(80) NOT NULL,
  password varchar(80) NOT NULL,
  email varchar(80) NOT NULL,
  type enum(master, user) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user (id, username, fname, lname, password, email, type) VALUES
  (1, xfairley717141, Xfairley717141, Xyquirreah, fairley, password123, Xyquirreah.fairley@faulkner.edu, user);
