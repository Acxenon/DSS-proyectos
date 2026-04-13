# 🗳️ Sistema de Encuesta de Satisfacción en PHP

## 📌 Descripción

Este proyecto consiste en el desarrollo de un sistema web de **encuesta de satisfacción**, en el cual los usuarios pueden registrarse, iniciar sesión y emitir un voto sobre su experiencia.

El sistema garantiza la seguridad de los datos mediante el uso de buenas prácticas como el cifrado de contraseñas y el uso de consultas preparadas con PDO.

---

## 🎯 Funcionalidades principales

* ✅ Registro de usuarios
* ✅ Inicio de sesión seguro
* ✅ Cifrado de contraseñas con `password_hash()`
* ✅ Verificación con `password_verify()`
* ✅ Sistema de votación (una sola vez por usuario)
* ✅ Registro de fecha de voto
* ✅ Visualización de resultados
* ✅ Cálculo de porcentajes y total de votos
* ✅ Manejo de sesiones
* ✅ Protección de rutas privadas

---

## 🛠️ Tecnologías utilizadas

* PHP
* MySQL
* PDO (PHP Data Objects)
* Bootstrap 5

---

## 🧱 Estructura del proyecto

```
encuesta-php/
│
├── conexion.php
├── header.php
├── footer.php
├── registro.php
├── procesar_registro.php
├── login.php
├── procesar_login.php
├── bienvenida.php
├── votar.php
├── resultados.php
├── logout.php
└── README.md
```

---

## 🗄️ Base de datos

### 📌 Crear la base de datos

```sql
DROP DATABASE IF EXISTS encuesta_db;
CREATE DATABASE encuesta_db;
USE encuesta_db;

-- Tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(100) NOT NULL,
    usuario VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Tabla de votos
CREATE TABLE votos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT UNIQUE,
    opcion VARCHAR(50),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);
```

---

## 🔐 Seguridad implementada

* 🔒 Contraseñas cifradas con `password_hash()`
* 🔒 Verificación segura con `password_verify()`
* 🔒 Uso de PDO con sentencias preparadas (`prepare()` y `execute()`)
* 🔒 Protección de páginas mediante sesiones
* 🔒 Restricción de acceso a usuarios no autenticados
* 🔒 Prevención de múltiples votos por usuario

---

## 🚀 Instalación y uso

1. Clonar el repositorio:

```bash
git clone https://github.com/Acxenon/DSS-proyectos.git
```

2. Colocar el proyecto en la carpeta de tu servidor local (ejemplo: XAMPP `htdocs`)

3. Crear la base de datos en MySQL usando el script proporcionado

4. Configurar la conexión en:

```
conexion.php
```

5. Ejecutar el proyecto en el navegador:

```
http://localhost/encuesta-php
```

---

## 📊 Características de la encuesta

* Cada usuario puede votar una sola vez
* Se guarda la fecha del voto
* Se muestran:

  * Número total de votos
  * Votos por opción
  * Porcentaje por opción

---

## 👤 Autor

* Nombre: Emmanuel Zenon Lovo Chavarria

---

## 📌 Notas finales

Este proyecto fue desarrollado con fines académicos, aplicando conceptos de:

* Desarrollo web con PHP
* Manejo de bases de datos
* Seguridad básica en aplicaciones web

---
