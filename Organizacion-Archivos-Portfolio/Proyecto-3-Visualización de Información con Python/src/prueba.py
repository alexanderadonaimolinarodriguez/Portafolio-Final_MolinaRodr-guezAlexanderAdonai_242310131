import pandas as pd
import matplotlib.pyplot as plt

# 1. Cargar y procesar datos
df = pd.read_csv("ventas_tecnologia.csv")
df["Ingresos"] = df["Cantidad"] * df["precio_unitario"]

# Preparar datos para los reportes
ventas_prod = df.groupby("Producto")["Cantidad"].sum().reset_index()
ingresos_prod = df.groupby("Producto")["Ingresos"].sum().reset_index()
ventas_mes = df.groupby("Mes", sort=False)["Cantidad"].sum().reset_index()

# Crear la figura principal (ajustamos el tamaño para que quepa todo)
fig = plt.figure(figsize=(12, 10))
plt.subplots_adjust(hspace=0.6) # Espacio entre gráficas y tablas

# --- FILA 1: GRÁFICAS ---

# Gráfica de Barras: Ventas por producto
ax1 = plt.subplot(2, 3, 1)
ax1.bar(ventas_prod["Producto"], ventas_prod["Cantidad"], color='skyblue')
ax1.set_title("Ventas por producto")

# Gráfica de Líneas: Evolución mensual
ax2 = plt.subplot(2, 3, 2)
ax2.plot(ventas_mes["Mes"], ventas_mes["Cantidad"], marker='o', color='green')
ax2.set_title("Evolución mensual de ventas")

# Gráfica Circular: % de Ventas
ax3 = plt.subplot(2, 3, 3)
ax3.pie(ventas_prod["Cantidad"], labels=ventas_prod["Producto"], autopct='%1.1f%%')
ax3.set_title("Porcentaje de ventas por producto")

# --- FILA 2: TABLAS ---

# Tabla 1: Ventas totales por producto
ax4 = plt.subplot(2, 3, 4)
ax4.axis('off') # Ocultar ejes para que parezca una tabla limpia
tabla1 = ax4.table(cellText=ventas_prod.values, colLabels=ventas_prod.columns, loc='center', cellLoc='center')
ax4.set_title("Ventas totales por producto", pad=10)

# Tabla 2: Ventas por mes
ax6 = plt.subplot(2, 3, 5)
ax6.axis('off')
tabla3 = ax6.table(cellText=ventas_mes.values, colLabels=ventas_mes.columns, loc='center', cellLoc='center')
ax6.set_title("Ventas totales por mes", pad=10)

# Tabla 3: Ingresos por producto
ax5 = plt.subplot(2, 3, 6)
ax5.axis('off')
tabla2 = ax5.table(cellText=ingresos_prod.values, colLabels=ingresos_prod.columns, loc='center', cellLoc='center')
ax5.set_title("Ingresos generados por producto", pad=10)

plt.show()

# --- PARTE III: IDENTIFICACIÓN DE JERARQUÍA ---
# Esto se sigue imprimiendo en consola para tu análisis rápido
print(f"Producto líder en ingresos: {ingresos_prod.loc[ingresos_prod['Ingresos'].idxmax(), 'Producto']}")
print(f"Mes con mayor actividad: {ventas_mes.loc[ventas_mes['Cantidad'].idxmax(), 'Mes']}")
