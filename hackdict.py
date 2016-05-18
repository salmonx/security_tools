#! /bin/python
# author: 947270280@qq.com

maxlen = 12
minlen = 5
wordslist = ['abc','123','admin']

def dfs(password):
	lenght = len(password)
	if lenght > maxlen:
		return 
	if lenght >= minlen:
		print password
	for word in wordslist:
		dfs(password+word)


def main():
	for password in wordslist:
		dfs(password)


if __name__ == '__main__':
	main()
