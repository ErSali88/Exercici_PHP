# M0613 ACT07 – Práctica guiada de sesiones y cookies

## Parte 1

Al recargar `comptador.php` siempre sale 1 porque la variable se crea de nuevo en cada carga y desaparece al terminar la página.

## Parte 4

### Cookie

- Se guarda en el navegador.
- El usuario la puede ver y modificar.
- Viaja el nombre y el valor.
- Tamaño pequeño.
- Se crea con `setcookie()`.
- Se accede con `$_COOKIE`.
- Se usa para idioma, tema o preferencias.

### Sesión

- Se guarda en el servidor.
- El usuario no puede ver los datos.
- Solo viaja el identificador `PHPSESSID`.
- Puede guardar más información.
- Se crea con `session_start()`.
- Se accede con `$_SESSION`.
- Se usa para login, carrito o pedidos.

## Parte 5

**Pregunta 1**
Porque la variable se crea desde cero en cada recarga y HTTP no recuerda el estado.

**Pregunta 2**
Porque la cookie solo existe en la siguiente petición después de crearla.

**Pregunta 3**
La cookie `PHPSESSID` guarda el identificador que usa el servidor para encontrar el fichero `sess_`.

**Pregunta 4**
Porque las cookies y las sesiones necesitan enviar las cabeceras antes del contenido, o aparece el error `headers already sent`.

**Pregunta 5**
Porque la cookie puede leerse y modificarse, mientras que la sesión guarda los datos en el servidor.

**Pregunta 6**
Porque el modo incógnito crea una nueva sesión y el contador vuelve a empezar.