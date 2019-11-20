show database; //menampilkan database
use RM; //masuk kedalam database
create database RM; membuat database RM
create table tblokasi(id_warung int(6) auto_increment primary key, longitude text, lotitude text, alamat text); /**membuat table bernama tblokasi**/
create table tbwarung(id int(6) auto_increment primary key, namawarung text, namapemilik text, alamat text); /membuat table bernama tbwarung**/
create table tbuser(id int(6) auto_increment primary key, username varchar(20), pass varchar(20), level varchar(20));
insert into tblokasi(`idwarung`,`longitude`,`lotitude`,`alamat`) values (``,``,``,``); //**untuk mengisi dalam table tblokasi
insert into tbwarung(`id`,`namawarung`,`namapemilik`,`alamat`) values (`1234`,`warung`,`sukijan`,`tambakberas`); //untuk mengisi dalam table tb warung
alter table tblokasi modify column alamat varchar(200); //untuk mengganti type datase
select * from tbwarung; //untuk menampilkan table
delete from tbwarung where id=1234; //untuk menghapus baris 