#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Tue Jul  6 15:47:38 2021

@author: jzimmer1
"""

#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Mon Jun 28 13:55:13 2021

@author: jzimmer1
"""

import pandas as pd
from pandas_ods_reader import read_ods
import json
import matplotlib.pyplot as plt
import seaborn as sns
import numpy as np
import scipy as sp
from numpy import linalg
from scipy import linalg
from collections import Counter
from mpl_toolkits.mplot3d import Axes3D
import random

# === === Helper functions === ===
def write_json(data, filename):
    with open(filename,"w") as f:
        json.dump(data,f)
    return None

def get_json(filename):
    with open(filename) as f:
        jsonobj = json.load(f)
    return jsonobj

# === === Other artifacts that might be useful === ===
# # Load the original data as dataframes
# path="characters-aggregated.ods"
# df_original = pd.read_json("June2021_df_original.json")
# df_n_original =  pd.read_json("June2021_df_n_original.json")
# df_std_original =  pd.read_json("June2021_df_std_original.json")
# column_dict_original = get_json("June2021_column_dict_original.json")

# # Load the tables that tell you what the BAP traits are and who the characters are
# character_map, bap_map = pd.read_html("codebook.html")

# Output from SVD (without removing means)
# df1 = pd.read_json("July2021_SVD_df.json")
# U1 = get_json("July2021_SVD_U.json")
# D1 = get_json("July2021_SVD_D.json")
# V1 = get_json("July2021_SVD_V.json")
# Sig1 = get_json("July2021_SVD_Sig.json")
# X1 = get_json("July2021_SVD_X.json")
# remakeX1 = get_json("July2021_SVD_remakeX.json")


df_bap = pd.read_json("July2021_df_bap.json")
df_traits = pd.read_json("July2021_df_traits.json")

clean_column_dict = get_json("July2021_cleaned_column_dict.json")

def runSVD(df1,dropcols=['unnamed.1','name','work'],n=None):
    if len(dropcols) > 0:
        for x in dropcols:
            df1 = df1.drop(x,axis=1)
    if n==None:
        n=df1.shape[1]-1
    X = df1.to_numpy()
    #decompose
    U, D, V = np.linalg.svd(X)
    # get dim of X
    M,N = X.shape
    # Construct sigma matrix in SVD (it simply adds null row vectors to match the dim of X)
    Sig = sp.linalg.diagsvd(D,M,N)
    # Now you can get X back:
    remakeX = np.dot(U, np.dot(Sig, V))
    assert np.sum(remakeX - X) < 0.00001
    return df1, U, D, V, Sig, X, remakeX

# Output from SVD without removing means
df1, U, D, V, Sig, X, remakeX = runSVD(df_traits)

# Remove the average of each trait
df1_means = df1.mean()
df1_normed = df1 - df1_means

# Output from SVD WITH removing means
df2, U2, D2, V2, Sig2, X2, remakeX2 = runSVD(df1_normed,dropcols=[])

# Remove the average of each trait using the BAP df as a sanity check
df3, U3, D3, V3, Sig3, X3, remakeX3 = runSVD(df_bap)

# Remove the average of each trait
df3_means = df3.mean()
df3_normed = df3 - df3_means
df4, U4, D4, V4, Sig4, X4, remakeX4 = runSVD(df3_normed,dropcols=[])

assert np.sum(U4-U2) < 0.0001
assert np.sum(D4-D2) < 0.0001
assert np.sum(V4-V2) < 0.0001
assert np.sum(remakeX2-remakeX4) < 0.0001






