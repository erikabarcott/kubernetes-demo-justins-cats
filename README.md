# Kubernetes Demo: Justin's Cats


This is a basic demo you can use for working with persistent data in Kubernetes deployments, as well as a lot of other things. This demo has a PHP front end which pulls image URLs out of a PostgreSQL database. Okay I admit it, it's all cat pictures.

## Requirements

* PostgreSQL 9.5
* PHP with PostgreSQL support enabled.
* A web server which can run PHP files.

## Install

1. Put the contents of the `web` directory into your webroot.

2. Put the contents of the `main` directory into your PostgreSQL data directory. (In most cases this will be `/var/lib/postgresql/9.5/main`.)

Digital Ocean article on how to do that:

https://www.digitalocean.com/community/tutorials/how-to-move-a-postgresql-data-directory-to-a-new-location-on-ubuntu-16-04#step-2-—-pointing-to-the-new-data-location

## Postgres Commands

If you need to create the database by hand, here are the commands.

Create the database:

```
sudo -u postgres psql
create database cat_storage;
\c cat_storage;
create user cat_dev with encrypted password '9lives';
grant all privileges on database cat_storage to cat_dev;
grant all privileges on all tables in schema public to cat_dev;
```

Add a table for the pics:

```
CREATE TABLE cat_pictures(
  cat_id serial primary key,
  cat_name text,
  pic_url text
);

```
insert images

```
insert into cat_pictures(cat_name,pic_url) values('Autumn', 'cats/autumn.jpg');
insert into cat_pictures(cat_name,pic_url) values('Cat and Goat', 'cats/cat-and-goat.jpg');
insert into cat_pictures(cat_name,pic_url) values('Kitten', 'cats/kitten.jpg');
insert into cat_pictures(cat_name,pic_url) values('Kitten', 'cats/pawsup.png');
insert into cat_pictures(cat_name,pic_url) values('Cutest Kitten', 'cats/cutestkitten.jpg');
insert into cat_pictures(cat_name,pic_url) values('Smile!', 'cats/smile.jpg');
insert into cat_pictures(cat_name,pic_url) values('Purrito', 'cats/purrito.jpg');
insert into cat_pictures(cat_name,pic_url) values('Purrito', 'cats/tuxedo.jpg');
```
