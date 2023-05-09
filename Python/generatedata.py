import random
import csv

grades = ["1", "2", "3", "4", "5", "6"]
stream = ["Science","Economics","Arts","Social"]
happiness = ["1","2"]
def generate_grade():
  return random.choice(grades)
def generate_stream():
    return random.choice(stream)
def generate_happiness():
    return random.choice(happiness)

def generate_data_set():
  data_set = []
  for i in range(1, 10):
    grade = generate_grade()
    data_set.append(grade)
  stream = generate_stream()
  feedback = generate_happiness()
  data_set.append(stream)
  data_set.append(feedback)
  return data_set
def write_to_csv(data_set):
  with open("../Python/dataset.csv", "a",newline='') as file:
    writer = csv.writer(file)
    writer.writerow(data_set)
for i in range(1,100):
    data_set = generate_data_set()
    write_to_csv(data_set)
