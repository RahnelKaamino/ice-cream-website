import sys
sys.path.append('../')

from model.FoodModel import FoodModel
from pypika import MySQLQuery
from db.Connection import Database

class FoodController:
    def __init__(self):
        self.table = FoodModel().table

    def addFood(self, request):
        query = str(MySQLQuery.into(self.table).columns(self.table.name, self.table.price).insert(request.get('name'), request.get('price')))

        db = Database()
        result = db.Write(query)
        del db

        return {
            'status': 200
        }

    def modifyFood(self, request):
        query = str(MySQLQuery.update(self.table).set(self.table.name, request.get('name')).set(self.table.price, request.get('price')).where(self.table.id == request.get('id')))

        db = Database()
        db.Write(query)
        del db

        return {
            'status': 200,
        }

    def removeFood(self, request):
        query = str(MySQLQuery.from_(self.table).delete().where(self.table.id == request.get('id')))

        db = Database()
        db.Write(query)
        del db

        return {
            'status': 200,
        }

    def displayFood(self):
        query = str(MySQLQuery.from_(self.table).select('*'))

        db = Database()
        result = db.ReadMany(query)
        del db

        return {
            'status': 200,
            'data': result,
        }

