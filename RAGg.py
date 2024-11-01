import networkx as nx
import matplotlib.pyplot as plt

def is_deadlock_detected(RAG):
    try:
        cycle = nx.find_cycle(RAG, orientation='original')
        return True
    except nx.NetworkXNoCycle:
        return False

def build_resource_allocation_graph(resource_allocation_graph):
    RAG = nx.Graph()

    for process in resource_allocation_graph.processes:
        RAG.add_node(f"P{process.id}", bipartite=0)
        for resource in process.resources_allocated:
            RAG.add_node(resource, bipartite=1)
            RAG.add_edge(f"P{process.id}", resource)

    return RAG

# Contoh penggunaan
resource_allocation_graph = ResourceAllocationGraph()

# Menambahkan proses dan sumber daya ke graf
resource_allocation_graph.add_process(Process(id=1))
resource_allocation_graph.add_process(Process(id=2))
resource_allocation_graph.add_resource('R1')
resource_allocation_graph.add_resource('R2')

# Mengalokasikan dan meminta sumber daya
resource_allocation_graph.allocate_resource(process_id=1, resource='R1')
resource_allocation_graph.request_resource(process_id=2, resource='R1')
resource_allocation_graph.request_resource(process_id=2, resource='R2')

# Memeriksa deadlock
RAG = build_resource_allocation_graph(resource_allocation_graph)
if is_deadlock_detected(RAG):
    print("Deadlock terdeteksi.")
else:
    print("Tidak ada deadlock.")

# Menampilkan status graf
resource_allocation_graph.display()

# Visualisasi Resource Allocation Graph (RAG)
pos = {node: (0, i) for i, node in enumerate(RAG.nodes) if RAG.nodes[node]['bipartite'] == 0}
pos.update({node: (1, i) for i, node in enumerate(RAG.nodes) if RAG.nodes[node]['bipartite'] == 1})
plt.figure(figsize=(8, 4))
nx.draw(RAG, pos, with_labels=True, node_color='skyblue', node_size=1000, font_size=10)
plt.title("Resource Allocation Graph")
plt.show()
