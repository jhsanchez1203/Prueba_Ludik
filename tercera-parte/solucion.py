import multiprocessing  # Importamos el módulo multiprocessing para trabajar con procesamiento paralelo

# Función que procesa una parte de las URLs (un chunk)
def procesar_parte_urls(lineas):
    urls_unicas = set()  # Conjunto para almacenar URLs únicas
    contador = 0  # Contador para contar cuántas URLs válidas encontramos
    for url in lineas:  # Iteramos sobre cada línea (URL) en la lista dada
        url = url.strip()  # Eliminamos espacios en blanco al inicio y al final de la URL
        # Verificamos si la URL contiene 'shop' y termina en '.html'
        if 'shop' in url and url.endswith('.html'):
            if url not in urls_unicas:  # Si la URL no está ya en el conjunto
                urls_unicas.add(url)  # La añadimos al conjunto de URLs únicas
                contador += 1  # Aumentamos el contador de URLs válidas
    return urls_unicas, contador  # Devolvemos el conjunto de URLs únicas y el contador de válidas

# Función principal que procesa el archivo de URLs utilizando procesamiento paralelo
def procesar_urls_en_paralelo(nombre_archivo, num_workers=4):
    with open(nombre_archivo, 'r') as archivo:  # Abrimos el archivo de URLs en modo lectura
        lineas = archivo.readlines()  # Leemos todas las líneas del archivo (una lista de URLs)

    # Dividimos la lista de URLs en chunks basados en el número de workers (hilos de procesamiento)
    chunk_size = len(lineas) // num_workers  # Calculamos el tamaño de cada chunk
    chunks = [lineas[i:i + chunk_size] for i in range(0, len(lineas), chunk_size)]  # Creamos los chunks

    # Creamos un pool de workers para el procesamiento paralelo
    with multiprocessing.Pool(num_workers) as pool:
        resultados = pool.map(procesar_parte_urls, chunks)  # Procesamos cada chunk en paralelo

    # Combinar resultados de los workers
    urls_unicas = set()  # Conjunto final para almacenar todas las URLs únicas
    total_contador = 0  # Contador total de URLs válidas
    for urls, contador in resultados:  # Iteramos sobre los resultados de cada worker
        urls_unicas.update(urls)  # Actualizamos el conjunto de URLs únicas
        total_contador += contador  # Sumamos el contador de cada worker al total

    # Mostramos el total de URLs válidas encontradas
    print(f'Total de URLs válidas: {total_contador}')
    return urls_unicas  # Devolvemos el conjunto de URLs únicas

# Punto de entrada del script (se ejecuta cuando el archivo se ejecuta como un script principal)
if __name__ == "__main__":
    nombre_archivo = 'urls.txt'  # Nombre del archivo de URLs que vamos a procesar
    urls_validas = procesar_urls_en_paralelo(nombre_archivo)  # Llamamos a la función principal para procesar las URLs
    # Listamos las URLs válidas (que cumplen los criterios)
    for url in urls_validas:
        print(url)
