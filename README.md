**a) ¿Qué diferencia hay entre `echo` y `print` en PHP?**  
- `echo` y `print` sirven para mostrar texto en pantalla, pero tienen diferencias:  
  - `echo` **no devuelve valor**, es más rápido y puede imprimir múltiples argumentos separados por comas.  
  - `print` **devuelve siempre el valor 1**, por lo que puede usarse en expresiones. Solo acepta un argumento.  
Ejemplo:
```php
echo "Hola", " Mundo";   // válido
print "Hola Mundo";      // válido
```

---

**b) ¿Qué significa que PHP sea un lenguaje de tipado débil (loosely typed)?**  
Significa que PHP **convierte automáticamente los tipos de datos según el contexto**, sin necesidad de que el programador declare explícitamente el tipo. Esto puede facilitar el trabajo, pero también generar errores si no se controla.  

Ejemplo:
```php
$a = "5";     // string
$b = 10;      // int
$c = $a + $b; // PHP convierte "5" a número automáticamente

echo $c;      // Resultado: 15
```
Aquí, aunque `$a` es un string, PHP lo interpreta como número al sumarlo con `$b`.

---

**c) Diferencia entre un array indexado y un array asociativo en PHP**  
- **Array indexado**: usa índices numéricos (0, 1, 2, …).  
- **Array asociativo**: usa claves definidas por el programador (strings).  

Ejemplo:
```php
// Array indexado
$frutas = ["Manzana", "Banana", "Naranja"];
echo $frutas[1]; // Banana

// Array asociativo
$persona = ["nombre" => "Wilver", "edad" => 22];
echo $persona["nombre"]; // Wilver
```

---

**d) Enlace del script funcionando en el VPS**  
Aquí debes pegar la URL de tu servidor donde subiste el archivo. Ejemplo:  
```
http://10.12.3.12/AMNact1t4/
```

---
