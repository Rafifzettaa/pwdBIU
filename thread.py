import threading
# import time

# Fungsi yang akan dijalankan oleh setiap thread
def contoh_fungsi():
    thread_name = threading.current_thread().name
    print(f"{thread_name} dimulai.")
    
    # ... operasi di dalam area kritis ...
    
    print(f"{thread_name} selesai.")

# Membuat dua thread
thread1 = threading.Thread(target=contoh_fungsi, name="Malware")
thread2 = threading.Thread(target=contoh_fungsi, name="Thread-2")

# Menjalankan thread
thread1.start()
thread2.start()

# Menunggu kedua thread selesai
thread1.join()
thread2.join()
