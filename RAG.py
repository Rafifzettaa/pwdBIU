import networkx as nx
import matplotlib.pyplot as plt

G = nx.Graph()

G.add_nodes_from(['P1','P2','P3','P4'])

G.add_nodes_from(['R1', 'R2', 'R3'])
 
allocation_edges = [('P1', 'R1'), ('P2', 'R2') , ('P3', 'R3'), ('P4', 'R1')]
G.add_edges_from(allocation_edges, label='allocates')

request_edges = [('P1','R2'), ('P2','R3'), ('P3','R1'),('P4','R2')]
G.add_edges_from(request_edges,label ='requests')

pos = nx.spring_layout(G)
nx.draw(G, pos , with_labels=True, node_size=1000,node_color='lightblue')
edge_labels = {(u, v): G[u][v]['label'] for u,v in G.edges}
nx.draw_networkx_edge_labels(G, pos, edge_labels=edge_labels)

plt.show()