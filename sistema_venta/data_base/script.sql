create schema sistema_venta_db;
use sistema_venta_db;

create table 	ciudades(id_ciudad int auto_increment not null, nomb_ciudad varchar(30) not null,
				primary key(id_ciudad));
                
create table	presentaciones(id_present int auto_increment not null, nomb_present varchar(20) not null,
				primary key(id_present));
                
create table	clientes(id_cliente varchar(10) not null, nomb_cliente varchar(25) not null,
				apell_cliente varchar(30) not null, tel_cliente varchar(10) not null, correo_cliente varchar(40) not null, 
                dir_cliente varchar(45) not null, idciudad_cliente int not null,
                primary key(id_cliente),
                foreign key(idciudad_cliente) references ciudades(id_ciudad));
                
create table	proveedores(id_proveedor varchar(12) not null, nomb_proveedor varchar(30) not null, tel_proveedor varchar(10) not null, 
				correo_proveedor varchar(40) not null, dir_proveedor varchar(45) not null, idciudad_proveedor int not null,
                primary key(id_proveedor),
                foreign key(idciudad_proveedor) references ciudades(id_ciudad));
                
create table	productos(id_producto int auto_increment not null, ref_producto varchar(25) not null, nomb_producto varchar(25) not null,
				idpresent_producto int not null,
                primary key(id_producto),
                foreign key(idpresent_producto) references presentaciones(id_present));
                
create table	roles(id_rol int auto_increment not null, nomb_rol varchar(15) not null,
				primary key(id_rol));
                
create table 	usuarios(id_usuario int auto_increment not null, doc_usuario varchar(10) not null,
				nomb_usuario varchar(30) not null, cont_usuario varchar(10) not null, idrol_usuario int not null,
                primary key(id_usuario),
                foreign key(idrol_usuario) references roles(id_rol));
                
create table 	entradas(id_entrada int auto_increment not null, fecha_entrada date not null, idusuario_entrada int not null,
				idprov_entrada varchar(12) not null, factura_entrada varchar(30) not null,
                idproducto_entrada int not null, cant_entrada int not null, valor_entrada double not null,
                primary key(id_entrada), 
                foreign key(idusuario_entrada) references usuarios(id_usuario),
                foreign key(idprov_entrada) references proveedores(id_proveedor),
                foreign key(idproducto_entrada) references productos(id_producto)); 
                
create table 	facturas(id_factura int auto_increment not null, fecha_factura date not null, idusuario_factura int not null,
				remsalida_factura int not null, idcliente_factura varchar(10) not null,  total_factura double not null,
                primary key(id_factura),
                foreign key(idusuario_factura) references usuarios(id_usuario),
                foreign key(idcliente_factura) references clientes(id_cliente));
                
                
create table 	salidas(id_salida int auto_increment not null, rem_salida int not null, idproducto_salida int not null,
				cant_salida int not null, valor_salida int not null,
                primary key(id_salida),
                foreign key(idproducto_salida) references productos(id_producto));

                
                
                
                
                
                
                
                