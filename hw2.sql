create database hw2;
use hw2;

create table users(
id integer primary key auto_increment, 
username varchar(50), 
password varchar(255))Engine="InnoDB";

create table contents(
id integer primary key auto_increment,
titolo varchar(255),
immagine varchar(255),
descrizione varchar(255))Engine="InnoDB";

create table content_user(
user_id integer,
content_id integer,
primary key(user_id,content_id),
index idx_id_utente(user_id),
index idx_id_contenuto(content_id),
foreign key(user_id) references users(id),
foreign key(content_id) references contents(id)
)Engine="InnoDB";

create table exercises(
nome varchar(255) primary key,
descrizione varchar(255)
)Engine="InnoDB";

create table exercise_user(
user_id integer,
exercise_nome varchar(255),
primary key(user_id,exercise_nome),
index idx_id_utente(user_id),
index idx_esercizio(exercise_nome),
foreign key(user_id) references users(id),
foreign key(exercise_nome) references exercises(nome)

)Engine="InnoDB";

insert into contents(titolo,immagine,descrizione) values('Corso di pilates','./images/pilates.jpg','Corso adatto a chi vuole sentirsi bene e restare in forma, aumentando la propria efficienza fisica!');
insert into contents(titolo,immagine,descrizione) values('Corso di pugilato','./images/pugilato.jpg','Impara le basi di questa antica disciplina basata su forza, velocità a coordinazione!');
insert into contents(titolo,immagine,descrizione) values('Corso di aerobica','./images/aerobica.jpg','Ideale per chi vuole tonificare il proprio corpo e perdere peso, perfetto per chi vuole seguire uno stile di vita salutare.');
insert into contents(titolo,immagine,descrizione) values('Ginnastica posturale','./images/ginnastica_posturale.png','Corso dedicato a chi vuole migliorare la propria postura; è anche molto utile a chi soffre di problemi o patologie legati alla colonna vertebrale.');
insert into contents(titolo,immagine,descrizione) values('Corso di zumba','./images/zumba.jpg','Questo corso si basa su lezioni di fitness musicale, nelle quali la musica afro-caraibica incontra i tradizionali movimenti dell\' aerobica.');
insert into contents(titolo,immagine,descrizione) values('Corso di spinning','./images/spinning.jpg','Lo spinning è un\' attività di gruppo eseguita su una bicicletta stazionaria, perfetta per bruciare calorie in compagnia!');

insert into exercises(nome,descrizione) values('Addominali','Esercizio per l\' allenamento dei muscoli della zona addominale. 4 serie da 25 ripetizioni a fine allenamento.');
insert into exercises(nome,descrizione) values('Push-up','Esercizio per il potenziamento di pettorali, spalle e tricipiti. 3 serie da 10 ripetizioni a fine allenamento');
insert into exercises(nome,descrizione) values('Squat','Esercizio per tonificare glutei e gambe. 3 serie da 12 ripetizioni a metá allenamento.');
insert into exercises(nome,descrizione) values('Panca piana','Esercizio che coinvolge molti muscoli, come pettorali, bicipiti, addome e trapezio. 4 serie da 10 ripetizioni a metá allenamento.');
insert into exercises(nome,descrizione) values('Affondi','Esercizio per l\' allenamento dei quadricipiti. 4 serie, due per gamba, da 10 ripetizioni ad inizio allenamento.');
insert into exercises(nome,descrizione) values('Alzate laterali','Esercizio per il potenziamento dei deltoidi. 4 serie da 10 ripetizioni ad inizio allenamento.');
insert into exercises(nome,descrizione) values('Pressa','Esercizio per il potenziamento dei quadricipiti. 4 serie da 12 ripetizioni a metá allenamento.');
insert into exercises(nome,descrizione) values('Trazioni alla sbarra','Esercizio completo che permette l\'allenamento di spalle, braccia e dorso. 4 serie da 10 ripetizioni a fine allenamento.');
insert into exercises(nome,descrizione) values('Curl con manubri','Esercizio per l\' allenamento dei bicipiti. 4 serie da 15 ripetizioni ad inizio allenamento.');