import funciones
from datetime import datetime

def reporte_medico():

    funciones.actualizar_dataframe()

    try:
        id_paciente = int(input("\nID paciente: "))
    except:
        print("ID inválido")
        return

    r = funciones.df[funciones.df["id"] == id_paciente]

    if r.empty:
        print("No encontrado")
        return

    p = r.iloc[0]

    prioridad = "ALTA" if p["temperatura"] >= 39 else "NORMAL"
    fecha = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

    reporte = f"""
================================
        REPORTE MÉDICO
================================
Fecha: {fecha}

ID: {p['id']}
Nombre: {p['nombre']}
Edad: {p['edad']}
Enfermedad: {p['enfermedad']}

Temperatura: {p['temperatura']}
Presión: {p['presion']}
Prioridad: {prioridad}

Medicamento: {p['medicamento']}
Especialidad: {p['especialidad']}
================================
"""

    print(reporte)

    archivo = f"reporte_{p['id']}.txt"
    with open(archivo, "w", encoding="utf-8") as f:
        f.write(reporte)

    print("Reporte guardado")