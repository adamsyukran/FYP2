import pandas as pd
from sklearn.ensemble import RandomForestRegressor
from sklearn.model_selection import train_test_split
from sklearn.metrics import r2_score
import sys

df = pd.read_csv('dataset.csv')
df.replace({'A': 5, 'B': 4, 'C': 3, 'D': 2, 'E': 1, 'F': 0}, inplace=True)

# Split the dataset into training and test sets
X = df.drop(['major', 'happiness'], axis=1)
y = df['major']
X = X.values
y = y.values
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

# Train a random forest regressor on the training set
rf = RandomForestRegressor(n_estimators=10, random_state=42)

rf.fit(X_train, y_train)

# Evaluate the R^2 score of the model on the test set
y_pred = rf.predict(X_test)
r2_score = r2_score(y_test, y_pred)
print(f"Model R^2 score: {r2_score}")

english="1"
malay="1"
science="1"
math="1"
history="1"
geography="1"
lifeskill="1"
religion="1"
arts="1"
print("o i")

#english = int(sys.argv[1])
#malay = int(sys.argv[2])
#science = int(sys.argv[3])
#math = int(sys.argv[4])
#history = int(sys.argv[5])
#geography = int(sys.argv[6])
#lifeskill = int(sys.argv[7])
#religion = int(sys.argv[8])
#arts = int(sys.argv[9])

subject_scores = []
subject_scores.append(english)
subject_scores.append(malay)
subject_scores.append(science)
subject_scores.append(math)
subject_scores.append(history)
subject_scores.append(geography)
subject_scores.append(lifeskill)
subject_scores.append(religion)
subject_scores.append(arts)
print("o i")

# Make a prediction on the user's subject scores
major_prediction = rf.predict([subject_scores])[0]
# Output the predicted major to the user
print(f"The predicted major based on your subject scores is: {major_prediction}")

