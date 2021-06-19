/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     19/06/2021 09:41:38                          */
/*==============================================================*/


drop table if exists ADMIN;

drop table if exists PRODUK_KELUAR;

drop table if exists PRODUK_MASUK;

drop table if exists SUPPLIER;

drop table if exists SUPPLY;

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create table ADMIN
(
   ID_ADMIN             int not null auto_increment,
   USERNAME             varchar(50),
   PASSWORD             varchar(50),
   primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table: PRODUK_KELUAR                                         */
/*==============================================================*/
create table PRODUK_KELUAR
(
   ID_PRODUK_KELUAR     int not null auto_increment,
   ID_ADMIN             int,
   TGL_KELUAR           date,
   PEMBELI              varchar(255),
   JML_QTY              int,
   NAMA_BARANG          varchar(255),
   NO_SURAT_JALAN       varchar(255),
   HARGA                int,
   TOTAL_HARGA          int,
   primary key (ID_PRODUK_KELUAR)
);

/*==============================================================*/
/* Table: PRODUK_MASUK                                          */
/*==============================================================*/
create table PRODUK_MASUK
(
   ID_PRODUK_MASUK      int not null auto_increment,
   ID_ADMIN             int,
   TGL_MASUK            date,
   BERAT_RM             int,
   HASIL_PRODUK         int,
   TRIMMING             int,
   KULIT                int,
   BILLY                int,
   DAGING_KEROK         int,
   AFALAN               int,
   SOAKING              int,
   BEKUAN_SOAKING       int,
   HASIL_PACKING        int,
   JML_MC               int,
   primary key (ID_PRODUK_MASUK)
);

/*==============================================================*/
/* Table: SUPPLIER                                              */
/*==============================================================*/
create table SUPPLIER
(
   ID_SUPPLIER          int not null auto_increment,
   ID_ADMIN             int,
   NAMA_SUPPLIER        varchar(255),
   NOMOR_HP             varchar(20),
   JENIS_IKAN           varchar(50),
   ALAMAT               varchar(255),
   primary key (ID_SUPPLIER)
);

/*==============================================================*/
/* Table: SUPPLY                                                */
/*==============================================================*/
create table SUPPLY
(
   ID_SUPPLIER          int not null,
   ID_PRODUK_MASUK      int not null,
   primary key (ID_SUPPLIER, ID_PRODUK_MASUK)
);

alter table PRODUK_KELUAR add constraint FK_MENGINPUT_1 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table PRODUK_MASUK add constraint FK_MENGINPUT_3 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table SUPPLIER add constraint FK_MENGINPUT_2 foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN) on delete restrict on update restrict;

alter table SUPPLY add constraint FK_SUPPLY foreign key (ID_SUPPLIER)
      references SUPPLIER (ID_SUPPLIER) on delete restrict on update restrict;

alter table SUPPLY add constraint FK_SUPPLY2 foreign key (ID_PRODUK_MASUK)
      references PRODUK_MASUK (ID_PRODUK_MASUK) on delete restrict on update restrict;

