FROM gcc:latest
COPY . .
RUN make
CMD ["./check_odd"]