import networkx as nx
import matplotlib.pyplot as plt

class Process:
    def __init__(self, id):
        self.id = id
        self.resources = set()

# Inisialisasi beberapa objek proses
process1 = Process(id=1)
process2 = Process(id=2)

# Memberikan alokasi sumber daya pada proses
process1.resources.add('R1')
process2.resources.add('R1')

# Simulasi deadlock
process1.resources.add('R2')
process2.resources.add('R2')

def build_resource_allocation_graph(processes):
    G = nx.Graph()
    for process in processes:
        for resource in process.resources:
            G.add_node(f'P{process.id}', bipartite=0)
            G.add_node(resource, bipartite=1)
            G.add_edge(f'P{process.id}', resource)

    return G

def plot_resource_allocation_graph(G):
    pos = {node: (0, i) for i, node in enumerate(G.nodes) if node in G.nodes if G.nodes[node]['bipartite'] == 0}
    pos.update({node: (1, i) for i, node in enumerate(G.nodes) if node in G.nodes if G.nodes[node]['bipartite'] == 1})
    
    plt.figure(figsize=(8, 4))
    nx.draw(G, pos, with_labels=True, node_color='skyblue', node_size=1000, font_size=10)
    plt.title("Resource Allocation Graph")
    plt.show()

# Contoh penggunaan
processes = [process1, process2]
resource_allocation_graph = build_resource_allocation_graph(processes)
plot_resource_allocation_graph(resource_allocation_graph)
