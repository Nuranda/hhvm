<?hh

FUNCTION FOO<T1 AS INT, T2 SUPER T1, PROHIBITED>(
  T1 $_a,
  T2 $_b,
  PROHIBITED $_c
): VOID WHERE PROHIBITED = T1 {
  ECHO "NO CASH VALUE\n";
}

FOO(1, 2, 3);