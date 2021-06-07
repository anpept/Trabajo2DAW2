## Ajedrez Daw2

###### Este proyecto es una prática para la asignatura de la ULPGC "Desarrollo de aplicaciones web II"

El proyecto es un portal web desarrollado con el CMS Wordpress que incorpora una tienda usando el plugin Woocommerce.

#### Características:

###### Gestión de usuarios
La página permite el inicio de sesión y el registro de usuarios. Dependiendo del perfil, al iniciar sesión serán redirigidos a:
	**Administrador**: Acceder al panel de administrador de Wordpress.
	**Editor**: Accederá al panel de administrador de Wordpress en el que podrá administrar entradas, imágenes, páginas, etiquetas y comentarios.
	**Autor**: Accederá al panel de administrador de Wordpress en el que sólo podrá administrar entradas, imágenes y comentarios.
	**Cliente**: accederá a un panel donde podrán modificar sus datos, ver sus pedidos, sus descargas, o cerrar sesión. 
Para gestionar a los usuarios se usan los plugins:
 *Ultimate Member* versión: 2.1.20 
 *Woocommerce* versión: 5.3.0.

Redirigir a los usuarios al iniciar y cerrar sesión
Cuando los usuarios cierren sesión serán redirigidos a la página de inicio para facilitar esto se ha usado el plugin “Login and Logout Redirect”.
Tienda
Haciendo uso del plugin Woocommerce se ha configurado la tienda. Este plugin es el que se encarga de mostrar los productos tanto físicos (tableros y libros) como los virtuales (cursos de ajedrez), y gestionar la venta de estos. 
Maquetación
Para maquetar la página web se ha usado el plugin “Elementor” en su versión gratuita. Este plugin facilita el diseño de la web.
Mostrar post
En las páginas de publicaciones es necesario filtrar los artículos por categorías y mostrar sólo aquellos que nos interesan, y de la manera que nos interesa. Para conseguir esto nos apoyamos en el plugin “WP Show Posts”.
Política de Cookies
Para mostrar la política de cookies se usa el plugin “GDPR Cookie Consent” que ya incorpora las diferentes políticas que exige la Unión Europea.
Tema y Plantilla
Por último, indicar que el tema usado en este trabajo es el “OceanWP” con la plantilla “Gym”. Este tema añade los plugins “Ocean Extra”, “WPForms Lite” y “Ocean Social Sharing” para añadir características adicionales (widgets, iconos de redes sociales, Formularios, etc)


