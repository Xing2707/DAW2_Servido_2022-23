peso = float(input("Cuanto pesa ?"))
altura = float(input("Cuanto mide en metros"))
if (peso!="" or peso==0) and (altura!="" or altura==0):
    imc = peso / (altura ** 2)
    print(f"Su imc es {imc:.2f}") #imc:.2f para controlar la salida de numeros decimales
else:
    print("Deben introducir algun numero que no sea de 0!")