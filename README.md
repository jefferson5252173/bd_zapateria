# Sistema para una zapateriateria



## Modelo de Entidad-Relacion

![modelo Entidad-Relacion](img/bd_zapateria.png "Modelo de Entidad-Relacion")



## Modelo Fisico de la BD

![modelo fisico](/img/modelo_fisico.png.png "Modelo Fisico de la BD")

## Tabla fabricante

![Tabla fabricante](img/tabla_fabricante.png "Tabla fabricante")

## Tabla Articulo

![Tabla Articulo](img/tabla_articulo.png "Tabla Articulo")

## Consultas a la BD

1. Mostrar la lista de todos los datos de los fabricantes 

`SELECT * FROM Fabricante;`

2. Mostrar la lista de los Fabricantes, poniendo un alias al nombre de la colomna

`SELECT nombre_fabricante AS Fabricante FROM Fabricante`

![Consulta2](img/consulta_2.png "Consulta 2")

3. Mostrar los nombres de los productos.

`SELECT nombre_articulo FROM Articulo`

![Consulta3](img/consulta_3.png "Consulta 3")

4. Obtener los nombres y los precios de los productos de la tienda.

`SELECT nombre_articulo AS Nombre, precio articulo AS Precio FROM Articulo`

![Consulta4](img/consulta_4.png "Consulta 4")

5. optenerlos nombres de los articulos cuyo precio sea superior a 50000

`SELECT nombre_articulo FROM articulo, precio articulo AS Precio FROM Articulo`
