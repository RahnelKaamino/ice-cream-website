import mysql.connector
import json

class Database:
    def __init__(self):
        self.conn = mysql.connector.connect(
            host='localhost',
            user='root',
            passwd='',
            database='rahnel_services',
        )
        self.csr = self.conn.cursor()

    def Read(self, sqlStatement):
        self.csr.execute(sqlStatement)
        key = [x[0] for x in self.csr.description]
        value = self.csr.fetchone()

        return dict(zip(key, value))

    def ReadMany(self, sqlStatement):
        self.csr.execute(sqlStatement)
        keys = [x[0] for x in self.csr.description]
        values = self.csr.fetchall()

        container = []

        for value in values:
            container.append(dict(zip(keys, value)))

        if container == []:
            container = None

        return container

    def Write(self, sqlStatement):
        self.csr.execute(sqlStatement)
        self.conn.commit()

    def __del__(self):
        self.csr.close()
        self.conn.close()