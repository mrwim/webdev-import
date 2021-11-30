create or replace table article
(
    id       int,
    title    varchar(255)           not null,
    content  varchar(10000)         null,
    author   varchar(255)           not null,
    datetime datetime default now() not null
)
    comment 'Article class';

create unique index article_id_uindex
    on article (id);

alter table article
    add constraint article_pk
        primary key (id);

alter table article
    modify id int auto_increment;

insert into article (title, content, author)
values ('Article 1', 'content 1', 'Author 1');
insert into article (title, content, author)
values ('Article 2', 'content 2', 'Author 2');
insert into article (title, content, author)
values ('Article 3', 'content 3', 'Author 3');