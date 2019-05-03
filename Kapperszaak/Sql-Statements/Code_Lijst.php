CREATE TABLE behandeling_dames (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
Knippen varchar(256) not null,
Wassen_Knippen_Drogen varchar(256) not null,
Wassen_Knippen_Fohenn varchar(256) not null,
Wassen_Fohnen varchar(256) not null,
Anders varchar(256) not null
);

-------

CREATE TABLE behandeling (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
Dames_K varchar(256) not null,
Dames_WKD varchar(256) not null,
Dames_WKF varchar(256) not null,
Dames_WF varchar(256) not null,


Heren_K varchar(256) not null,
Heren_B varchar(256) not null,
Heren_WK varchar(256) not null,
Heren_65 varchar(256) not null,


Kinderen_11 varchar(256) not null,


Kleuren_U varchar(256) not null,
Kleuren_UH varchar(256) not null,
Kleuren_UL varchar(256) not null,
Kleuren_HH varchar(256) not null,
Kleuren_DH varchar(256) not null,
Kleuren_HM varchar(256) not null,
Kleuren_E varchar(256) not null,
Kleuren_WV varchar(256) not null,

Anders varchar(256) not null
);

-------

CREATE TABLE persmed (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
naam varchar(256) not null,
achternaam varchar(256) not null,
email varchar(256) not null,
medewerker varchar(256) not null,
);


---
CREATE TABLE users (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
first_name varchar(256) not null,
last_name varchar(256) not null,
email varchar(256) not null,
username varchar(256) not null,
password varchar(256) not null,
);

--

CREATE TABLE datijd (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
date varchar(256) not null,
time varchar(256) not null,
);

--

CREATE TABLE behandeling (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
behandeling varchar(256) not null
);
---
CREATE TABLE behandeling (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
dames varchar(256) not null,
heren varchar(256) not null,
kleuren varchar(256) not null
);
---
SELECT * FROM datijd INNER JOIN persmed ON datijd.id=persmed.id;
Dit stukje tekst is van de admin pagina

-----
-----
CREATE TABLE behandeling (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
dames varchar(256) not null,
heren varchar(256) not null,
kleuren varchar(256) not null
);

CREATE TABLE datijd (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
date varchar(256) not null,
time varchar(256) not null
);

CREATE TABLE persmed (
id int(11) not null AUTO_INCREMENT PRIMARY KEY,
naam varchar(256) not null,
achternaam varchar(256) not null,
email varchar(256) not null,
medewerker varchar(256) not null
);