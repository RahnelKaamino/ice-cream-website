from flask import Flask, request
from flask_restful import Resource, Api
from flask_cors import CORS

from controller.FoodController import FoodController

app = Flask(__name__)
CORS(app)
api = Api(app)

class Food(Resource):
    def __init__(self):
        self.controller = FoodController()

    def post(self):
        return self.controller.addFood(request.form)

    def put(self):
        return self.controller.modifyFood(request.form)

    def delete(self):
        return self.controller.removeFood(request.form)

    def get(self):
        return self.controller.displayFood()

api.add_resource(Food, '/food')


if __name__ == '__main__':
    app.run(port=3000, debug=True)