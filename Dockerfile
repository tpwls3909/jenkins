FROM python:3.8

WORKDIR /usr/src/app

COPY requirements.txt ./
RUN python3 -m venv dj-env
RUN source ./dj-env/bin/activate
RUN pip install --upgrade pip
RUN pip install -r requirements.txt

COPY . .

EXPOSE 7979

CMD ["./manage.py","runserver","7979"]
