# Makefile

CC = gcc
CFLAGS = -Wall -Wextra -std=c11

# Files
OBJ = main.o isOdd.o
EXEC = check_odd

# Default target
all: $(EXEC)

$(EXEC): $(OBJ)
	$(CC) $(CFLAGS) -o $@ $(OBJ)

main.o: main.c isOdd.h
	$(CC) $(CFLAGS) -c main.c

isOdd.o: isOdd.c isOdd.h
	$(CC) $(CFLAGS) -c isOdd.c

clean:
	rm -f $(OBJ) $(EXEC)

