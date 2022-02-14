FROM python:3.8

WORKDIR /usr/src/app
#없으면 생성

COPY requirements.txt ./
RUN pip install --upgrade pip
RUN pip install Django
RUN pip install -r requirements.txt

COPY . .

EXPOSE 7979

CMD ["./manage.py","runserver","0.0.0.0:7979"]
