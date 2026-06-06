INSTITUTO TECNOLÓGICO SUPERIOR DE LERDO


Nombre del alumno:
Alexander Adonai Molina Rodríguez - 242310131


Nombre del profesor:
Jesús Salas Marín 


Nombre de la materia:
Administración y Organización de Datos


Carrera:
Ing. Informática


Fecha:
03/06/2026


Turno:
Matutino


SISTEMA DE VISUALIZACIÓN Y ANÁLISIS DE VENTAS

1. Portada e Introducción Ejecutiva
Este informe técnico detalla el desarrollo y comportamiento del sistema de análisis de datos implementado para una tienda de productos tecnológicos durante su primer semestre operativo. El ecosistema de este proyecto está conformado por un archivo de almacenamiento estructurado en formato de valores separados por comas (ventas_tecnologia.csv), el cual registra de manera compacta las transacciones mensuales organizadas por variables clave; un script automatizado en Python (prueba.py) que funge como el motor de procesamiento lógico, utilizando la librería pandas para la manipulación tabular de datos en memoria principal y la librería matplotlib para estructurar subgráficos y tablas analíticas; y finalmente, un reporte consolidado que traduce matrices numéricas puras en métricas de rendimiento comercial tangibles.

El diseño y puesta en marcha de esta arquitectura de software demuestra de forma sólida que adquirí la competencia del semestre: "Evaluar diferentes organizaciones de archivos aplicándolas a situaciones reales". En este escenario específico, se evaluaron las ventajas del formato estructurado CSV para el intercambio y lectura masiva de datos frente a los archivos de texto plano lineales de proyectos anteriores. Al enfrentarnos a un entorno donde un dueño de negocio necesita reportes de desempeño inmediatos, demostré la capacidad de procesar archivos de almacenamiento secundario orientados a tablas, agrupar registros mediante funciones de software dinámicas, calcular variables derivadas (como ingresos totales multiplicando cantidad por precio unitario) y estructurar salidas de información jerarquizadas, validando el impacto que tiene una correcta elección de la organización de archivos para agilizar la toma de decisiones empresariales.


2. Justificación de Formatos
Formato de Valores Separados por Comas (.csv): Se seleccionó este formato para el archivo ventas_tecnologia.csv debido a que representa un estándar de ingeniería altamente eficiente para el manejo de datos tabulares planos. Físicamente, al utilizar saltos de línea para delimitar registros y comas para segmentar los atributos de cada columna (Mes, Producto, Cantidad, precio_unitario), el archivo elimina por completo el uso de etiquetas de cierre o metadatos redundantes, minimizando drásticamente su tamaño en disco. Científicamente, este formato permite que la librería pandas invoque la función optimizada read_csv(), volcando la información del disco directamente en estructuras bidimensionales indexadas en memoria RAM (DataFrames). Esto permite ejecutar operaciones vectoriales de ordenamiento, agrupamiento y filtrado en microsegundos, optimizando el rendimiento de la CPU en comparación con el parseo manual línea por línea.
3. Estimación de Uso y Escalabilidad (Proyección Numérica)
En las condiciones base de la simulación semestral, el archivo registra un volumen inicial controlado de filas que interactúa perfectamente en un tiempo imperceptible para el usuario, generando un peso insignificante en el disco.

¿Qué le ocurre al sistema si recibe una cantidad grande de registros?
Complejidad Temporal de Carga y Procesamiento: La carga del archivo mediante pandas mantiene una relación lineal. Si la tienda tecnológica escala sus operaciones y pasa de registrar unas cuantas transacciones a procesar 1,000,000 de registros de ventas acumuladas por múltiples sucursales, el archivo CSV incrementará su peso físico a un aproximado de 35 MB en disco.
Impacto en Memoria Secundaria y RAM: Al ejecutar el script prueba.py, el intérprete de Python necesitará leer secuencialmente el millón de líneas y reservar suficiente espacio en la memoria RAM para construir el DataFrame. Funciones como .groupby() para consolidar las ventas por producto (Laptop, Mouse, Teclado) o clasificar los ingresos por mes requerirán algoritmos de ordenamiento internos con una complejidad. En este punto masivo, el sistema continuará respondiendo de manera estable, pero el tiempo de ejecución del script y el renderizado de la interfaz visual con subplots de matplotlib experimentará un retraso de varios segundos. Para asegurar la escalabilidad del sistema a nivel industrial sin perder el uso del archivo CSV, se requeriría implementar técnicas de lectura por bloques (chunksize) en Python para procesar el archivo en partes, evitando la saturación de la memoria principal del servidor.

4. Análisis Costo-Beneficio
Criterio de Evaluación 
Costo Técnico / Computacional 
Beneficio Operativo 
Infraestructura de Datos 
Bajo: No se requiere la adquisición de software de pago ni el despliegue de servidores de bases de datos relacionales en la nube, operando de manera local y autónoma. 
Alto: Portabilidad total. El archivo CSV es un estándar universal que puede compartirse de manera transparente e importarse en herramientas de oficina o sistemas corporativos de mayor escala sin requerir software de conversión. 
Complejidad de Procesamiento 
Moderado: El script requiere el uso y consumo de recursos de CPU y memoria RAM al cargar DataFrames completos y realizar operaciones lógicas de agregación matemática en tiempo de ejecución. 
Muy Alto: Capacidad analítica inmediata. Transforma listas crudas y abstractas de datos financieros en un reporte visual consolidado, aislando métricas de alta prioridad (como identificar al mes de Mayo como el de mayor movimiento). 
Desarrollo y Código Fuente 
Bajo: Arquitectura de código limpia y modularizada sin dependencias de interfaces de usuario complejas, facilitando el mantenimiento del script y la corrección de errores en la lógica de las variables. 
Alto: Control estricto de inventario y prioridades. El sistema revela con precisión científica qué productos sostienen el negocio (ej. la Laptop por ingresos y el Mouse por volumen de rotación), optimizando las decisiones de compra a los proveedores. 


5. Conclusión
El desarrollo e implementación de este sistema de visualización de información consolida los conocimientos de bajo nivel adquiridos a lo largo del semestre sobre la manipulación de estructuras organizadas de datos. El uso estratégico del formato CSV procesado mediante Python demuestra que las soluciones de almacenamiento secundario basadas en archivos estructurados son herramientas potentes, ligeras y de alta velocidad para resolver problemas del mundo real.
Esta práctica nos brinda el criterio técnico necesario como futuros ingenieros informáticos para comprender la organización física de la información en disco antes de avanzar al estudio formal de los Sistemas Gestores de Bases de Datos Relacionales en los próximos semestres. Se concluye con éxito que evaluar y elegir la correcta organización de los archivos en función de las necesidades de lectura, procesamiento y reporte de una organización, permite diseñar arquitecturas de software eficientes, escalables y orientadas a la optimización de recursos tecnológicos.
