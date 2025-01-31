import LoginForm from "@/components/LoginrForm";
import { Box, Container, Typography } from "@mui/material";

const Login = () => {
  return (
    <Container maxWidth="sm">
      <Box sx={{ my: 4 }}>
        <LoginForm />
      </Box>
    </Container>
  );
};

export default Login;
