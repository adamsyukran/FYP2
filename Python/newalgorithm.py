import pandas as pd
from sklearn.ensemble import RandomForestClassifier

# Load the data
data = pd.read_csv('student_data.csv')

# Preprocess the data
data.replace({'A': 5, 'B': 4, 'C': 3, 'D': 2, 'E': 1, 'F': 0}, inplace=True)

# Train the model
X = data.iloc[:, :-2].values
y = data.iloc[:, -1].values
model = RandomForestClassifier(n_estimators=100, random_state=42)
model.fit(X, y)

grade_mapping = {'A': 5, 'B': 4, 'C': 3, 'D': 2, 'E': 1, 'F': 0}

results = []
for i in range(5):
    grade = input(f"Enter your grade for Subject {i+1}: ")
    while grade.upper() not in grade_mapping:
        grade = input(f"Invalid input. Enter your grade for Subject {i+1}: ")
    results.append(grade_mapping[grade.upper()])

# Predict the class stream based on the user's input
stream = model.predict([results])[0]
print(f"Based on your grades, we recommend that you enter the {stream} stream.")